# SRpc 

## RpcClient composer repository

![icon](https://cdn0.iconfinder.com/data/icons/black-icon-social-media/256/099280-blinklist-logo.png)

# Via   `Composer`

- bash
 `composer` require `srpc/srpc` dev-master (Rec)

- Usage：

1. config `Srpc\Utils` / `Config.php` and  `RpcConfig.php` services and env 。

2. `demo` based on  `Yaf` Framework conf to differ `Dev`,`Production`,`localhost` env。
```  
use Srpc\Srpc;
// Srpc::get('ServicesName')->ServicesMethodName($params);
$staffResponse= Srpc::get('UploadService')->GetUpload($getStaffQuery);

```

# Update Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) 
and this project adheres to [Semantic Versioning](http://semver.org/).

## [0.1.0] - 2018-03-26
### Add Base Config
- INIT add base config@leon0204.
- Model add base model.etc,Catch,Img,Article.@leon0204.

