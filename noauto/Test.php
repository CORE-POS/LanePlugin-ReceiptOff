<?php

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new ReceiptOff();
        $obj->plugin_transaction_reset();
        $this->assertSame(0, CoreLocal::get('receiptToggle'));
    }
}

