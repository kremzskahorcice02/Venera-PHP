<?php

class Event extends Db{

    protected function getEvents() {
        $sql = "SELECT id, date, city, place, title, other_artists FROM event ORDER BY date DESC";
        return $this->getRes($sql);
    }

    protected function getFutureEvents() {
        $sql = "SELECT id, date, city, place, title, other_artists FROM event WHERE date >= CURDATE() ORDER BY date DESC";
        return $this->getRes($sql);
    }

    protected function getPreviousEvents() {
        $sql = "SELECT id, date, city, place, title, other_artists FROM event WHERE date < CURDATE() ORDER BY date DESC";
        return $this->getRes($sql);
    }

    private function getRes($sql) {
        return $this->connect() -> query($sql);
    }

    protected function deleteEventById($id) {
        $sql = "DELETE FROM event WHERE id = ?";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $id);

        if (!$stmt->execute()) {
            header("location:..\admin.php?error=cannotdelete");
        }
    }

    protected function findEventById($id) {
        $sql = "SELECT * FROM event WHERE id = ?";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $id);

        if (!$stmt->execute()) {
            return false;
        } else {
            return true;
        }
    }

    protected function insertEvent($title,$date,$city,$place,$url,$otherArtists) {
        $sql = "INSERT INTO event (title,date,city,place,url,other_artists) VALUES (?,?,?,?,?,?)";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssssss",$title,$date,$city,$place,$url,$otherArtists);

        if (!$stmt->execute()) {
            header("location:..\event-add.php?error=cannotaddevent");
        }
    }
}