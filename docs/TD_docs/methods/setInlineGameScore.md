---
title: setInlineGameScore
description: Bots only. Updates game score of the specified user in the game
---
## Method: setInlineGameScore  
[Back to methods index](index.md)


Bots only. Updates game score of the specified user in the game

### Params:

| Name     |    Type       | Required | Description |
|----------|:-------------:|:--------:|------------:|
|inline\_message\_id|[string](../types/string.md) | Yes|Inline message identifier|
|edit\_message|[Bool](../types/Bool.md) | Yes|True, if message should be edited|
|user\_id|[int](../types/int.md) | Yes|User identifier|
|score|[int](../types/int.md) | Yes|New score|
|force|[Bool](../types/Bool.md) | Yes|Pass True to update the score even if it decreases. If score is 0, user will be deleted from the high scores table|


### Return type: [Ok](../types/Ok.md)

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

$Ok = $MadelineProto->setInlineGameScore(['inline_message_id' => string, 'edit_message' => Bool, 'user_id' => int, 'score' => int, 'force' => Bool, ]);
```

Or, if you're into Lua:

```
Ok = setInlineGameScore({inline_message_id=string, edit_message=Bool, user_id=int, score=int, force=Bool, })
```

