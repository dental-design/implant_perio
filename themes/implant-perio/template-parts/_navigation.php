<?php
    // acf fields
    $telephone = get_field('contact_number', 'option');

    // Store menu object from CMS
    $menu_items = wp_get_nav_menu_items('Main Menu');

    // Create empty variables for menu items
    $group_1 = [];
    $group_2 = [];

    // Initialize the index variable
    $index = 0;

    // Helper function to add child items to their parent, recursively
    function add_child_to_group(&$group, $parent_id, $child) {
        foreach ($group as &$parent) {
            if ($parent['item']->ID == $parent_id) {
                $parent['children'][$child->ID] = [
                    'item' => $child,
                    'children' => [],
                ];
                return;
            }

            // Recursively search for the parent in the children
            add_child_to_group($parent['children'], $parent_id, $child);
        }
    }

    // Loop through the menu and store items in the empty group arrays
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) {
            if ($index < 3) {
                $group_1[$item->ID] = [
                    'item' => $item,
                    'children' => [],
                ];
            } else {
                $group_2[$item->ID] = [
                    'item' => $item,
                    'children' => [],
                ];
            }
            $index++;
        } else {
            // Add child items to the appropriate parent group recursively
            add_child_to_group($group_1, $item->menu_item_parent, $item);
            add_child_to_group($group_2, $item->menu_item_parent, $item);
        }
    }

    // Function to check if the current menu item or its children is the current page
    function is_active_menu_item($parent, $current_page_id) {
        if ($parent['item']->object_id == $current_page_id) {
            return true;
        }

        foreach ($parent['children'] as $child) {
            if (is_active_menu_item($child, $current_page_id)) { // Recursive check for nested children
                return true;
            }
        }

        return false;
    }

        // Recursive function to render menu items
    function render_menu_items($group, $level = 1) {
        $current_page_id = get_the_ID(); // Get current page ID

        foreach ($group as $parent) : 
            $active_class = is_active_menu_item($parent, $current_page_id) ? 'active' : ''; // Determine if the parent is active
            ?>

            <li class="<?= $active_class; ?> <?= !empty($parent['children']) ? 'has-children' : 'free'; ?>">
                <div class="nav-item-wrapper flex-row">
                    <a href="<?= esc_url($parent['item']->url) ?>"><?= esc_html($parent['item']->title) ?></a>
    
                    <?php if (!empty($parent['children'])) : ?>
                        <span class="text-white small-text icon-wrapper open-nav-click"><i class="fa-solid fa-chevron-right"></i></span>
                    <?php endif; ?>
                </div>

                <?php if (!empty($parent['children'])) : ?>

                    <ul class="children level-<?= $level; ?>"> <!-- Dynamically set the level class -->

                        <li class="icon-wrapper-sub">
                            <span class="text-white small-text icon-wrapper close-nav-click">
                                <i class="fa-solid fa-chevron-left"></i></li>
                            </span>

                        <?php render_menu_items($parent['children'], $level + 1); // Recursively render children, incrementing the level ?>
                    </ul>

                <?php endif; ?>
            </li>

        <?php endforeach; ?>
<?php }  ?>


<div class="main-navigation container small">

    <!-- mobile nav header container -->
    <div class="mobile-only homepage-link-wrapper bg-dark-green">
        <a href="<?= site_url(); ?>" class="text-white large-text mobile-home-link" aria-label="<?= get_bloginfo('title'); ?> mobile homepage link">Implant <span class="text-green">+</span> Perio<span class="small-screen-hide"> Clinic</span></a>
    </div>

    <nav class="flex-row" id="site-nav">

        <!-- left nav group -->
        <ul class="nav-group left-nav flex-row">
            <?php render_menu_items($group_1); ?>
        </ul>

        <!-- logo/ home link -->
        <div class="home-link-wrapper desktop-home-link-wrapper">
            <a href="<?= site_url(); ?>" class="home-link" aria-label="<?= get_bloginfo('title'); ?> homepage link">

                <!-- desktop logo -->
                <svg xmlns="http://www.w3.org/2000/svg" width="40.031" height="43.265" viewBox="0 0 40.031 43.265">
                    <g id="Group_4203" data-name="Group 4203" transform="translate(0 0)">
                        <g id="Group_4201" data-name="Group 4201" transform="translate(0 0)">

                            <path class="green" id="Path_8584" data-name="Path 8584" d="M32.647,81.306a6.748,6.748,0,0,1-.6,1.216,3.356,3.356,0,0,1-5.191,1c-.057-.036-.082-.043-.17-.1l-.127-.09-.259-.178-.514-.363a11.358,11.358,0,0,1-1.028-.8c-.05-.041-.1-.085-.149-.124.7-.029,1.386-.09,2.074-.161a32.721,32.721,0,0,0,5.054-.942q.6-.161,1.187-.344c-.089.295-.176.586-.282.891" transform="translate(-12.579 -41.098)" />

                            <path class="green" id="Path_8585" data-name="Path 8585" d="M58.845,76.329A2.585,2.585,0,0,1,55.1,77.54a2.664,2.664,0,0,0,.334-.191c.854-.593,4.739-4.5,4.739-4.5a11.421,11.421,0,0,1-1.33,3.478" transform="translate(-28.16 -37.232)" />

                            <path class="green" id="Path_8586" data-name="Path 8586" d="M57.328,66.9l-.12.824a31.623,31.623,0,0,1-2.954,2.587c-.882.682-3.417,2.618-3.908,2.889-.382-.3-1.008-.759-1.319-1.044-.147-.135-.289-.274-.435-.412.37-.161.732-.331,1.1-.507a31.35,31.35,0,0,0,7.8-5.3c-.053.322-.1.641-.159.964" transform="translate(-24.834 -33.7)" />

                            <path class="green" id="Path_8587" data-name="Path 8587" d="M41.657,57.679l-.516,1.434a31.849,31.849,0,0,1-3.528,2.7,32.446,32.446,0,0,1-6.754,3.41c-.206.074-.413.155-.623.228-.391.134-.787.256-1.184.376-.337.1-.676.194-1.016.284a32.563,32.563,0,0,1-8.432,1.1c-.7,0-1.4-.027-2.1-.075l-.085-.109-.1-.13-.024-.035-.035-.05-.042-.066-.172-.263-.343-.529L16.019,64.9c-.144-.214-.281-.443-.419-.669.751.121,1.5.211,2.252.279a32.575,32.575,0,0,0,11.633-1.054c.432-.123.86-.252,1.287-.392.1-.031.2-.06.306-.094l.045-.017c.064-.019.128-.037.193-.058.13-.045.257-.1.389-.145a32.509,32.509,0,0,0,6.048-2.89,31.945,31.945,0,0,0,4.2-3.065c-.1.294-.2.591-.3.886" transform="translate(-7.973 -29.025)" />

                            <path class="green" id="Path_8588" data-name="Path 8588" d="M40.266,46.742c-.024.045-.07.15-.072.15l-.083.193-.318.775-.61,1.471a31.912,31.912,0,0,1-4.731,3.348,32.588,32.588,0,0,1-21.7,3.929q-1.239-.205-2.472-.512C9.727,55.057,9.218,54,8.7,52.944l-.217-.515c.89.315,1.791.6,2.693.827a32.537,32.537,0,0,0,23.879-3.032,31.86,31.86,0,0,0,5.286-3.647Z" transform="translate(-4.336 -23.804)" />

                            <path id="Path_8589" data-name="Path 8589" d="M40.008,12.582a8.5,8.5,0,0,1-.482,2.245l-.6,1.568c-.3.712-.651,1.5-.993,2.237l-3.168,2.693a29.774,29.774,0,0,1-3.238,2.391l.308-.967.254-.8.061-.2.088-.239.153-.408.623-1.631.639-1.558c.223-.532.407-1.013.593-1.491.181-.5.388-.927.552-1.477l.52-1.592a4.15,4.15,0,0,0,.185-1.026,2.683,2.683,0,0,0-.514-1.7,2.528,2.528,0,0,0-1.443-.982,3.107,3.107,0,0,0-.462-.1c-.16-.026-.332-.014-.494-.035-.138.023-.21.009-.4.024l-.41.088-.2.044-.021,0-.038.014c-.993.345-1.991.662-3,.994l-1.572.574a2.082,2.082,0,0,1-1.822,2.081A2.113,2.113,0,0,1,23.3,12.63l-3.286-3.8c-.541-.586-1.015-1.171-1.638-1.766l-.889-.887-.112-.111,0-.008.01.011c.046.041-.047-.046-.031-.031l.019.019-.05-.043L17.1,5.838l-.414-.353a9.141,9.141,0,0,0-3.7-1.865c-.338-.043-.669-.135-1.012-.155l-1.026-.021c-.315.045-.626.086-.944.115a2.367,2.367,0,0,0-.557.125l-.605.17-.3.084-.151.042-.019.007-.014.005-.5.2a8.858,8.858,0,0,0-.958.468A7.575,7.575,0,0,0,3.179,9.537a11.306,11.306,0,0,0-.353,2.194l-.03.541a5.039,5.039,0,0,0-.03.579l.141,1.2.256,2.429c.111.806.273,1.605.4,2.41s.334,1.6.523,2.39.373,1.593.638,2.368c.249.777.468,1.569.749,2.337l.465,1.229c-.378-.117-.762-.242-1.163-.383l-1.614-.567c-.237-.629-.454-1.264-.685-1.9-.308-.8-.531-1.63-.762-2.458s-.488-1.648-.645-2.5C.894,18.569.7,17.731.544,16.883L.176,14.326.131,14l-.025-.159-.016-.2L.04,13.02c-.04-.4-.029-.929-.04-1.391A14.435,14.435,0,0,1,.327,8.85,10.846,10.846,0,0,1,2.973,3.731,10.939,10.939,0,0,1,5.243,1.883,12.492,12.492,0,0,1,6.516,1.2L7.171.912,7.253.875l.181-.06L7.585.767l.3-.1.6-.193A3.84,3.84,0,0,1,9.141.3c.51-.1,1.025-.19,1.541-.265L12.164,0c.494.012.988.107,1.478.164a12.852,12.852,0,0,1,5.313,2.351l.563.435.282.217.071.056.017.014.055.056.022.027.1.105.894.847c.617.536,1.174,1.217,1.8,1.838l1.113,1.37.2.215.266-.091L26.9,6.524C28,6.111,29.112,5.7,30.228,5.3l.052-.019.027-.009.161-.043.1-.024.2-.047.407-.1c.361-.067.852-.12,1.266-.153a7.944,7.944,0,0,1,2.354.282,7.169,7.169,0,0,1,3.942,2.769,7.082,7.082,0,0,1,1.265,4.62" transform="translate(0 0)" />
                            
                        </g>
                    </g>
                </svg>

            </a>
        </div>

        <!-- right nav group -->
        <ul class="nav-group right-nav flex-row">
            <?php render_menu_items($group_2); ?>
        </ul>

        <!-- telephone number - global acf --> 
        <div class="tel-link-container">
            <a class="tel-link nav-link text-white" href="tel:<?= str_replace(' ', '', $telephone); ?>"><?= $telephone; ?></a>
        </div>
    </nav>
</div>
