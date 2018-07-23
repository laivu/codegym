<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 7/23/18
 * Time: 10:51
 */

namespace App;


/**
 */
class AuthorizeNetAIM
{
    public $amount;
    public $card_num;
    public $exp_date;

    private $api_id;
    private $transaction_key;

    /**
     * AuthorizeNetAIM constructor.
     * @param $api_id
     * @param $transaction_key
     */
    public function __construct($api_id, $transaction_key)
    {
        $this->api_id = $api_id;
        $this->transaction_key = $transaction_key;
    }


    /**
     * @author Lai Vu <vuldh@nal.vn>
     * @return array
     */
    public function authorizeAndCapture()
    {
        return [
            'approved' => false,
            'transaction_id' => null,
            'error_message' => 'Error'
        ];
    }
}
