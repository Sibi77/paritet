<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="pir-table">
    <div class="pir-container">
       <div class="table-calc__tab-mob">
           <table class="pir-table__table">
               <thead>
               <tr>
                   <?php foreach($atts['table_header'] as $tablehead):?>
                       <td><?= $tablehead['title'] ?></td>
                   <?php endforeach; ?>
               </tr>
               </thead>
               <tbody>
               <?php foreach($atts['table_body'] as $tablebody):?>
                   <tr>
                       <?php foreach($tablebody['table_row'] as $tablerow):?>


                           <?php if($tablerow['table_file']){?>
                               <td>
                                   <a class="pir-table__download" href="<?= $tablerow['table_file']['url'] ?>">
                                       <img src="<?= $tablerow['table_icon']['url'] ?>" alt="doc">
                                       <?= $tablerow['table_name'] ?>
                                   </a>
                               </td>
                           <?php } ?>
                           <?php if(!$tablerow['table_file']){?>
                               <td>
                                   <?= $tablerow['table_name'] ?>
                               </td>
                           <?php } ?>

                       <?php endforeach; ?>

                   </tr>
               <?php endforeach; ?>

               </tbody>
           </table>
       </div>

    </div>
</div>