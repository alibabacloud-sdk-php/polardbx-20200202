<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDbInstancesResponseBody\dbInstances;

use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'status'       => 'Status',
        'expireTime'   => 'ExpireTime',
        'createTime'   => 'CreateTime',
        'payType'      => 'PayType',
        'DBType'       => 'DBType',
        'lockMode'     => 'LockMode',
        'VPCId'        => 'VPCId',
        'regionId'     => 'RegionId',
        'network'      => 'Network',
        'DBVersion'    => 'DBVersion',
        'description'  => 'Description',
        'nodeClass'    => 'NodeClass',
        'storageUsed'  => 'StorageUsed',
        'nodeCount'    => 'NodeCount',
        'zoneId'       => 'ZoneId',
        'DBInstanceId' => 'DBInstanceId',
        'engine'       => 'Engine',
        'lockReason'   => 'lockReason',
        'statusDesc'   => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->lockReason) {
            $res['lockReason'] = $this->lockReason;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['lockReason'])) {
            $model->lockReason = $map['lockReason'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
