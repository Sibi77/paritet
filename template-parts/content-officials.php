<tr>
    <td>
        <a <?php post_class('pir-table-api') ?>  href="<?php the_permalink(); ?>"><?= get_field("officials_fio"); ?></a>
    </td>
    <td><?= get_field("officials_position"); ?></td>
    <td><?= substr(get_field("officials_published_at"),0,10); ?></td>
</tr>