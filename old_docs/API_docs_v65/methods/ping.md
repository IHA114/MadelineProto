---
title: ping
description: ping parameters, return type and example
---
## Method: ping  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|ping\_id|[long](../types/long.md) | Yes|


### Return type: [Pong](../types/Pong.md)

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

$Pong = $MadelineProto->ping(['ping_id' => long, ]);
```

Or, if you're into Lua:

```
Pong = ping({ping_id=long, })
```

