<?php

class EventContr extends Event{

    public function deleteEvent($id) {
        if ($this->findEventById($id)) {
            $this->deleteEventById($id);
        }
    }

    public function addEvent($title,$date,$city,$place,$url,$otherArtists) {
        $this->insertEvent($title,$date,$city,$place,$url,$otherArtists);
        header("location:..\admin.php");
    }
}