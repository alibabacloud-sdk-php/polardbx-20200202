<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTasksRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

    /**
     * @var int
     */
    public $immediateStart;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'ids'            => 'Ids',
        'immediateStart' => 'ImmediateStart',
        'regionId'       => 'RegionId',
        'switchTime'     => 'SwitchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->immediateStart) {
            $res['ImmediateStart'] = $this->immediateStart;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['ImmediateStart'])) {
            $model->immediateStart = $map['ImmediateStart'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
