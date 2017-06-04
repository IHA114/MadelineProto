---
title: messages.getMessagesViews
description: messages.getMessagesViews parameters, return type and example
---
## Method: messages.getMessagesViews  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[InputPeer](../types/InputPeer.md) | Yes|
|id|Array of [int](../types/int.md) | Yes|
|increment|[Bool](../types/Bool.md) | Yes|


### Return type: [Vector\_of\_int](../types/int.md)

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

$Vector_of_int = $MadelineProto->messages->getMessagesViews(['peer' => InputPeer, 'id' => [int], 'increment' => Bool, ]);
```

Or, if you're into Lua:

```
Vector_of_int = messages.getMessagesViews({peer=InputPeer, id={int}, increment=Bool, })
```

