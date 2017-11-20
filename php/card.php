<?php
  function card($col, $title, $text) {
    return '<div class="'.$col.'">
              <div class="card">
                <div class="card-body">
                  <h2 class="mt-4">'.$title.'</h2>
                  '.$text.'
                </div>
              </div>
            </div>';
  }
?>
