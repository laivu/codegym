<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 7/23/18
 * Time: 10:56
 */

namespace Tests;

use App\Payment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testProcessPaymentReturnsTrueOnSuccessfulPayment()
    {
        $paymentDetails = array(
            'amount'   => 123.99,
            'card_num' => '4111-1111-1111-1111',
            'exp_date' => '03/2013',
        );

        $payment = new Payment();

//        TODO: need mock
//        $authorizeNet = new AuthorizeNetAIM($payment::API_ID, $payment::TRANS_KEY);

        $authorizeNet = $this->getMockBuilder('\App\AuthorizeNetAIM')
            ->setConstructorArgs(array($payment::API_ID, $payment::TRANS_KEY))
            ->getMock();

        $authorizeNet->expects($this->once())
            ->method('authorizeAndCapture')
            ->will($this->returnValue([
                'approved' => true,
                'transaction_id' => '1'
            ]));

        $result = $payment->processPayment($authorizeNet, $paymentDetails);

        $this->assertTrue($result);
    }
}
