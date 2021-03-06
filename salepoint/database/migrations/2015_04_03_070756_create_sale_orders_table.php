<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_orders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',60);
            $table->dateTime('sale_order_time');
            $table->double('subTotal')->default(0.0);
            $table->double('discount')->default(0.0);
            $table->double('total')->default(0.0);
            $table->enum('type', ['saleOrder','invoice']);
            $table->enum('status', ['validate','cancel'])->default('validate');
            $table->integer('partner_id')->unsigned();
            $table->integer('paymentMethod_id')->unsigned();
			$table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->foreign('paymentMethod_id')->references('id')->on('paymentMethods');
		});

        DB::unprepared("CREATE TRIGGER utrg_UpdateQtyAvalibleMore AFTER UPDATE ON sale_orders
                        FOR EACH ROW
                        BEGIN

                            DECLARE idProduct int;
                            DECLARE qty int;

                            DECLARE c1 CURSOR FOR
                                SELECT sol.product_id, sol.qty
                                FROM sale_orders so
                                JOIN sale_order_lines sol ON sol.sale_order_id = so.id
                                WHERE so.id = NEW.id;

                            DECLARE CONTINUE HANDLER FOR NOT FOUND SET @hecho = TRUE;
                            OPEN c1;
                                loop1: LOOP
                                FETCH c1 INTO idProduct,qty;

                                IF @hecho THEN
                                    LEAVE loop1;
                                END IF;

                                UPDATE  products SET qtyAvailable = qtyAvailable + qty,
                                virtualAvailable = virtualAvailable + qty
                                WHERE id = idProduct;

                                END LOOP loop1;
                            CLOSE c1;

                        END;");




	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_orders');
        DB::unprepared("DROP TRIGGER IF EXISTS utrg_UpdateQtyAvalibleMore");
	}

}
