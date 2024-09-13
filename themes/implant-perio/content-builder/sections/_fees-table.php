<?php
    $heading = $args['heading'];
    $table = $args['fees_table'];
    $asterisk = $args['asterisk_text'];
?>

<section class="fees-table section">
    <div class="container">

        <!-- text content -->
        <div class="text-content">
            <h2 class="add-margin center-text"><?= $heading; ?></h2>
        </div>

        <!-- fees table -->
         <?php if ($table) : ?>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr class="bg-grey">
                            <th class="large-text semi-bold-text text-white"><strong>Treatment</strong></th>
                            <th class="large-text semi-bold-text text-white col-2"><strong>Fee (from)</strong></th>
                        </tr>

                        <tbody>
                            <?php foreach($table as $row) : ?>
                                <tr>
                                    <td class="standard-text"><?= $row['treatment']; ?></td>
                                    <td class="standard-text col-2"><?= $row['fee']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        <?php endif; ?>

        <p class="small-text asterisk-text"><?= $asterisk; ?></p>
    </div>
</section>