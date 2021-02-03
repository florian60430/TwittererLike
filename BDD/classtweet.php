<?php
    class tweet 
    {
        private $_idtweet;
        private $_tweetcontenu;
        private $_date;
        private $_idUser;
    
    
        function __construct($bdd, $tweetcontenu, $Date) {
    
            $data = $bdd->query("SELECT 'tweetcontenu' from 'tweet' order by 'date' DESC" );
            $tabData = $data->fetch();
            
        $this->_idUser = $tabData['id_user'];
        $this->_tweetcontenu = $tabData['tweetcontenu'];
        $this->_date = $tabData['date'];
        $this->_idtweet = $tabData['id_tweet'];
       
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }



?>