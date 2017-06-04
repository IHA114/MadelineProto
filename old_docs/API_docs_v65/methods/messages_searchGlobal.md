---
title: messages.searchGlobal
description: messages.searchGlobal parameters, return type and example
---
## Method: messages.searchGlobal  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|q|[string](../types/string.md) | Yes|
|offset\_date|[int](../types/int.md) | Yes|
|offset\_peer|[InputPeer](../types/InputPeer.md) | Yes|
|offset\_id|[int](../types/int.md) | Yes|
|limit|[int](../types/int.md) | Yes|


### Return type: [messages\_Messages](../types/messages_Messages.md)

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

$messages_Messages = $MadelineProto->messages->searchGlobal(['q' => string, 'offset_date' => int, 'offset_peer' => InputPeer, 'offset_id' => int, 'limit' => int, ]);
```

Or, if you're into Lua:

```
messages_Messages = messages.searchGlobal({q=string, offset_date=int, offset_peer=InputPeer, offset_id=int, limit=int, })
```

