---
title: messages.getDialogs
description: messages.getDialogs parameters, return type and example
---
## Method: messages.getDialogs  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|exclude\_pinned|[Bool](../types/Bool.md) | Optional|
|offset\_date|[int](../types/int.md) | Yes|
|offset\_id|[int](../types/int.md) | Yes|
|offset\_peer|[InputPeer](../types/InputPeer.md) | Yes|
|limit|[int](../types/int.md) | Yes|


### Return type: [messages\_Dialogs](../types/messages_Dialogs.md)

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

$messages_Dialogs = $MadelineProto->messages->getDialogs(['exclude_pinned' => Bool, 'offset_date' => int, 'offset_id' => int, 'offset_peer' => InputPeer, 'limit' => int, ]);
```

Or, if you're into Lua:

```
messages_Dialogs = messages.getDialogs({exclude_pinned=Bool, offset_date=int, offset_id=int, offset_peer=InputPeer, limit=int, })
```

