<tr>
    <td><a <?php post_class('pir-table-api') ?>  href="<?php the_permalink(); ?>"><?= get_field("issuer_title"); ?></a></td>
    <td><?= get_field("issuer_inn"); ?></td>
    <td><?= substr(get_field("issuer_publishedAt"),0,10) ; ?></td>
</tr>