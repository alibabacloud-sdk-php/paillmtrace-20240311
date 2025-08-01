<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\GetOnlineEvalTaskResponseBody\task;
use AlibabaCloud\Tea\Model;

class GetOnlineEvalTaskResponseBody extends Model
{
    /**
     * @description Internal error code. Set only when the response is in error.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description Response error message. Set only when the response is in error.
     *
     * @example task id is empty
     *
     * @var string
     */
    public $message;

    /**
     * @description POP request ID
     *
     * @example 6F352A02-9C0D-54A7-B57C-663CF71D5714
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Task information
     *
     * @var task
     */
    public $task;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'task' => 'Task',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnlineEvalTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }

        return $model;
    }
}
