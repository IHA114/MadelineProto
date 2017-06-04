---
title: contacts.search
description: contacts.search parameters, return type and example
---
## Method: contacts.search  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|q|[string](../types/string.md) | Yes|
|limit|[int](../types/int.md) | Yes|


### Return type: [contacts\_Found](../types/contacts_Found.md)

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

$contacts_Found = $MadelineProto->contacts->search(['q' => string, 'limit' => int, ]);
```

Or, if you're into Lua:

```
contacts_Found = contacts.search({q=string, limit=int, })
```

