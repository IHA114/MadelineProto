---
title: messages.setEncryptedTyping
description: messages.setEncryptedTyping parameters, return type and example
---
## Method: messages.setEncryptedTyping  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[InputEncryptedChat](../types/InputEncryptedChat.md) | Yes|
|typing|[Bool](../types/Bool.md) | Yes|


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

$Bool = $MadelineProto->messages->setEncryptedTyping(['peer' => InputEncryptedChat, 'typing' => Bool, ]);
```

Or, if you're into Lua:

```
Bool = messages.setEncryptedTyping({peer=InputEncryptedChat, typing=Bool, })
```

