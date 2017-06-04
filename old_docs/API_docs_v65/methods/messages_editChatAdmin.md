---
title: messages.editChatAdmin
description: messages.editChatAdmin parameters, return type and example
---
## Method: messages.editChatAdmin  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|chat\_id|[InputPeer](../types/InputPeer.md) | Yes|
|user\_id|[InputUser](../types/InputUser.md) | Yes|
|is\_admin|[Bool](../types/Bool.md) | Yes|


### Return type: [Bool](../types/Bool.md)

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

$Bool = $MadelineProto->messages->editChatAdmin(['chat_id' => InputPeer, 'user_id' => InputUser, 'is_admin' => Bool, ]);
```

Or, if you're into Lua:

```
Bool = messages.editChatAdmin({chat_id=InputPeer, user_id=InputUser, is_admin=Bool, })
```

