<?php
    $heading = $args['heading'];
    $table = $args['fees_table'];
    $asterisk = $args['asterisk_text'];
?>

<section class="fees-table bg-grey section">
    <div class="container small">

        <!-- text content -->
        <div class="text-content">
            <h2 class="add-margin center-text"><?= $heading; ?></h2>
        </div>

        <!-- fees table -->
         <?php if ($table) : ?>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th class="large-text semi-bold-text text-white"><strong>Treatments</strong></th>
                            <th class="large-text semi-bold-text text-white"><strong>Pay as you go fee</strong></th>
                            <th class="large-text semi-bold-text text-white"><strong>Practice plan</strong></th>
                        </tr>

                        <tbody>
                            <?php foreach($table as $row) : ?>
                                <tr>
                                    <td class="standard-text"><?= esc_html($row['treatment']) ?></td>
                                    <td class="standard-text"><?= esc_html($row['pay_as_you_go_fee']) ?></td>
                                    <td class="standard-text"><?= esc_html($row['practice_plan_fee']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        <?php endif; ?>

        <p class="small-text"><?= $asterisk; ?></p>
    </div>
</section>