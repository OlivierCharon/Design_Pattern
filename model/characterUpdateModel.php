<?php
    
    // UPDATE ONE CHARACTER
    SPDO::getInstance()->query("UPDATE Characters SET nameChara = '$name' WHERE idChara = '$id");