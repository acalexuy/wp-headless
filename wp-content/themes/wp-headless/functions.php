<?php
// Admin modifications.
require_once 'inc/admin.php';

// Add Menus.
require_once 'inc/menus.php';

// Add GraphQL resolvers.
require_once 'inc/graphql/resolvers.php';

require_once 'inc/misc/helpers.php';

// Custom Post Types
require_once 'inc/custom-post-types/comparison.php';
require_once 'inc/custom-post-types/disclaimers.php';
require_once 'inc/custom-post-types/star-rating-reports.php';
require_once 'inc/custom-post-types/team-members.php';
require_once 'inc/custom-post-types/brand-page.php';
require_once 'inc/custom-post-types/credit-score.php';
require_once 'inc/custom-post-types/landing-page.php';
require_once 'inc/custom-post-types/rate-checker.php';
require_once 'inc/custom-post-types/super-risk-tolerance.php';

//Custom Fields
require_once 'inc/custom-fields/user-profile-fields.php';

require_once 'inc/custom-post-templates/sub-hubs.php';