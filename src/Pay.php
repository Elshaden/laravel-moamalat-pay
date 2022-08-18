<?php

namespace MoamalatPay;

class Pay
{

    public function init()
    {
        return view('moamalat-pay::pay')->render();
    }

    public function pay($amount, $reference = '')
    {
        return "<script> _moamalatPay.pay($amount, '$reference'); </script>";
    }
}
