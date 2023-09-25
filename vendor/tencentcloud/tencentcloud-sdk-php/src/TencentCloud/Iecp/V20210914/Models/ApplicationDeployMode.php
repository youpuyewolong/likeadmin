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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用部署模式
 *
 * @method integer getType() 获取1:指定节点部署 2:单元部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置1:指定节点部署 2:单元部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceID() 获取资源ID
 * @method void setResourceID(integer $ResourceID) 设置资源ID
 * @method string getResourceName() 获取资源名
 * @method void setResourceName(string $ResourceName) 设置资源名
 */
class ApplicationDeployMode extends AbstractModel
{
    /**
     * @var integer 1:指定节点部署 2:单元部署
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 资源ID
     */
    public $ResourceID;

    /**
     * @var string 资源名
     */
    public $ResourceName;

    /**
     * @param integer $Type 1:指定节点部署 2:单元部署
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceID 资源ID
     * @param string $ResourceName 资源名
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
