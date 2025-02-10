<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_owner_id')->constrained('users')->onDelete('cascade'); // Reference to users table
            $table->string('subject');
            $table->enum('quote_stage', ['Draft', 'Negotiation', 'Approved', 'Rejected'])->default('Draft');
            $table->string('team')->nullable();
            $table->string('carrier')->nullable();
            $table->string('deal_name')->nullable();
            $table->date('valid_until')->nullable();
            $table->foreignId('contact_id')->nullable()->constrained('contacts')->onDelete('set null');
            //$table->foreignId('account_id')->nullable()->constrained('accounts')->onDelete('set null');

            // Billing Address
            $table->string('billing_street')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_code')->nullable();
            $table->string('billing_country')->nullable();

            // Shipping Address
            $table->string('shipping_street')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_code')->nullable();
            $table->string('shipping_country')->nullable();

            // Quote Totals
            $table->decimal('sub_total', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('total', 10, 2)->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
