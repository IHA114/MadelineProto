<?php
/*
Copyright 2016 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/

namespace danog\MadelineProto\Wrappers;

/**
 * Manages peers.
 */
trait PeerHandler
{
    public function get_peer($id, $recursive = true)
    {
        if (is_numeric($id)) {
            if (isset($this->API->chats[$id])) {
                return $this->API->chats[$id];
            }
//            if ($recursive) {
//            }
            throw new \danog\MadelineProto\Exception("Couldn't find peer by provided chat id ".$id);
        }
        $id = str_replace('@', '', $id);
        foreach ($this->API->chats as $chat) {
            if (isset($chat['username']) && $chat['username'] == $id) {
                return $chat;
            }
        }
        if ($recursive) {
            $this->resolve_username($id);

            return $this->get_peer($id, false);
        }
        throw new \danog\MadelineProto\Exception("Couldn't find peer by provided username ".$id);
    }

    public function get_input_peer($id)
    {
        return $this->constructor2inputpeer($this->get_peer($id));
    }

    public function constructor2inputpeer($peer)
    {
        switch ($peer['_']) {
            case 'user':
                return $peer['self'] ? ['_' => 'inputPeerSelf'] : ['_' => 'inputPeerUser', 'user_id' => $peer['id'], 'access_hash' => $peer['access_hash']];
            case 'chat':
            case 'chatEmpty':
                return ['_' => 'inputPeerChat', 'chat_id' => $peer['id']];
            case 'channel':
                return ['_' => 'inputPeerChannel', 'channel_id' => $peer['id'], 'access_hash' => $peer['access_hash']];
            default:
                throw new \danog\MadelineProto\Exception('Invalid constructor given');
        }
    }

    public function resolve_username($username)
    {
        $res = $this->API->method_call('contacts.resolveUsername', ['username' => str_replace('@', '', $username)]);
        if ($res['_'] == 'contacts.resolvedPeer') {
            return $res;
        }
        throw new \danog\MadelineProto\Exception('resolve_username returned an unexpected constructor: '.var_export($username, true));
    }
}