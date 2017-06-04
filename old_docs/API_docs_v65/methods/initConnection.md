---
title: initConnection
description: initConnection parameters, return type and example
---
## Method: initConnection  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|api\_id|[int](../types/int.md) | Yes|
|device\_model|[string](../types/string.md) | Yes|
|system\_version|[string](../types/string.md) | Yes|
|app\_version|[string](../types/string.md) | Yes|
|lang\_code|[string](../types/string.md) | Yes|
|query|[!X](../types/!X.md) | Yes|


### Return type: [X](../types/X.md)

### Example:


```
$MadelineProto = new \danog\MadelineProto\API();
if (isset($token)) { // Login as a bot
    $this->bot_login($token);
}
if (isset($number)) { // Login as a user
    $sentCode = $MadelineProto->phone_login($number);
    echo 'Enter the code you received: ';
    $code = '';
    for ($x = 0; $x < $sentCode['type']['length']; $x++) {
        $code .= fgetc(STDIN);
    }
    $MadelineProto->complete_phone_login($code);
}

$X = $MadelineProto->initConnection(['api_id' => int, 'device_model' => string, 'system_version' => string, 'app_version' => string, 'lang_code' => string, 'query' => !X, ]);
```

Or, if you're into Lua:

```
X = initConnection({api_id=int, device_model=string, system_version=string, app_version=string, lang_code=string, query=!X, })
```

