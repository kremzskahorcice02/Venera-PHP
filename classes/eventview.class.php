<?php

class EventView extends Event{
    
    public function showAllEventsAdminMode() {
        $res = $this->getEvents();
        if ($res -> num_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $formattedDate = $this->formatDate($row['date']);
                echo '<div class="event-row">
                <form method="post" action="..\includes\delete-event.inc.php">
                    <input type="hidden" name="id" value="' . $row['id'] . '"/>
                    <button type="submit" name="submit">X</button>
                </form>
                <p>' . $formattedDate . ' ' . $row['city'] . ' — ' . 
                $row['place'] . ((empty($row['title'])) ? '' : (' (' . $row['title'] . ')')) .
                 ((empty($row['other_artists']) ? '' : (' + ' . $row['other_artists']))) . '</p></div>';
            }
        }    
    }

    public function formatDate($date) {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return date_format($date, "d.m.Y");
    }

    public function showPreviousEvents() {
        return $this->echoFormatted($this->getPreviousEvents());
    }

    public function showFutureEvents() {
        return $this->echoFormatted($this->getFutureEvents());
    }

    private function echoFormatted($res) {
        if ($res -> num_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $dateFormatted = $this->formatDate($row['date']);
                echo '<p><span>' . $dateFormatted . '</span> ' . $row['city'] . ' — ' . 
                $row['place'] . ((empty($row['title'])) ? '' : (' (' . $row['title'] . ')')) .
                 ((empty($row['other_artists']) ? '' : (' + ' . $row['other_artists']))) . '</p>';
            }
            return true;
        } else {
            return false;
        }
    }
}