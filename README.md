# SRpc 

## RpcClient composer repository

![icon](https://cdn0.iconfinder.com/data/icons/black-icon-social-media/256/099280-blinklist-logo.png)

# Via   `Composer`

- bash
 `composer` require `srpc/srpc` dev-master (推荐)

- 使用方法：

1. 首先配置 `Srpc\Utils` 下的 `Config.php` 和 `RpcConfig.php` 两个文件中的 服务和环境 。

2. `demo` 中使用的是基于 `Yaf` 框架的 conf 区分 `Dev`,`Production`,`localhost` 环境。
```  
use Srpc\Srpc;
// Srpc::get('服务名称')->服务对应的方法($params);
$staffResponse= Srpc::get('UploadService')->GetUpload($getStaffQuery);

```

# 更新日志
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) 
and this project adheres to [Semantic Versioning](http://semver.org/).

## [0.1.0] - 2018-03-26
### 添加基础配置
- INIT add base config@leon0204.
- Model add base model.etc,Catch,Img,Article.@leon0204.

