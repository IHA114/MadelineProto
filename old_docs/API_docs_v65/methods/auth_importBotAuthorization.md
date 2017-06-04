---
title: auth.importBotAuthorization
description: auth.importBotAuthorization parameters, return type and example
---
## Method: auth.importBotAuthorization  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|a|[Bool](../types/Bool.md) | Optional|
|b|[Bool](../types/Bool.md) | Optional|
|c|[Bool](../types/Bool.md) | Optional|
|d|[Bool](../types/Bool.md) | Optional|
|api\_id|[int](../types/int.md) | Yes|
|api\_hash|[string](../types/string.md) | Yes|
|bot\_auth\_token|[string](../types/string.md) | Yes|


### Return type: [auth\_Authorization](../types/auth_Authorization.md)

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

$auth_Authorization = $MadelineProto->auth->importBotAuthorization(['a' => Bool, 'b' => Bool, 'c' => Bool, 'd' => Bool, 'api_id' => int, 'api_hash' => string, 'bot_auth_token' => string, ]);
```

Or, if you're into Lua:

```
auth_Authorization = auth.importBotAuthorization({a=Bool, b=Bool, c=Bool, d=Bool, api_id=int, api_hash=string, bot_auth_token=string, })
```

