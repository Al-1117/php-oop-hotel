<!-- Creo la classe stanza con le sue voci -->

<?php
 class Room{
   public $id;
   public $room_number;
   public $floor;
   public $beds;
   public $created_at;
   public $updated_at;


   // inserisco un construct per i dati obbligatori

   public function __construct($_id, $_room_number, $_floor, $beds){
     $this->id = $_id;
     $this->room_number = $_room_number;
     $this->floor = $_floor;
     $this->beds = $beds;
    }

    // Metodo per ottenere le informazioni della stanza
    public function getRoomInfo(){
      return [
        'id' => $this->id,
        'room_number' => $this->room_number,
        'floor' => $this->floor,
        'beds' => $this->beds,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];

    }


  }
?>
