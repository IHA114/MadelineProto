---
title: req_pq
description: req_pq parameters, return type and example
---
## Method: req\_pq  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|nonce|[int128](../types/int128.md) | Yes|


### Return type: [ResPQ](../types/ResPQ.md)

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

$ResPQ = $MadelineProto->req_pq(['nonce' => int128, ]);
```

Or, if you're into Lua:

```
ResPQ = req_pq({nonce=int128, })
```

