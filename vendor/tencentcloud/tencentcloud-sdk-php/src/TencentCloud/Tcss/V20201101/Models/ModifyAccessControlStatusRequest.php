<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessControlStatus请求参数结构体
 *
 * @method array getEventIdSet() 获取处理事件ids
 * @method void setEventIdSet(array $EventIdSet) 设置处理事件ids
 * @method string getStatus() 获取标记事件的状态，     
EVENT_DEALED:事件已经处理
     EVENT_INGNORE：事件忽略
     EVENT_DEL:事件删除
     EVENT_ADD_WHITE:事件加白
 * @method void setStatus(string $Status) 设置标记事件的状态，     
EVENT_DEALED:事件已经处理
     EVENT_INGNORE：事件忽略
     EVENT_DEL:事件删除
     EVENT_ADD_WHITE:事件加白
 * @method string getRemark() 获取备注事件信息
 * @method void setRemark(string $Remark) 设置备注事件信息
 */
class ModifyAccessControlStatusRequest extends AbstractModel
{
    /**
     * @var array 处理事件ids
     */
    public $EventIdSet;

    /**
     * @var string 标记事件的状态，     
EVENT_DEALED:事件已经处理
     EVENT_INGNORE：事件忽略
     EVENT_DEL:事件删除
     EVENT_ADD_WHITE:事件加白
     */
    public $Status;

    /**
     * @var string 备注事件信息
     */
    public $Remark;

    /**
     * @param array $EventIdSet 处理事件ids
     * @param string $Status 标记事件的状态，     
EVENT_DEALED:事件已经处理
     EVENT_INGNORE：事件忽略
     EVENT_DEL:事件删除
     EVENT_ADD_WHITE:事件加白
     * @param string $Remark 备注事件信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EventIdSet",$param) and $param["EventIdSet"] !== null) {
            $this->EventIdSet = $param["EventIdSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
