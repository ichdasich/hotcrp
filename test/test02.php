<?php
// test02.php -- HotCRP S3 and database unit tests
// Copyright (c) 2006-2022 Eddie Kohler; see LICENSE.

declare(strict_types=1);
require_once(__DIR__ . '/setup.php');
TestRunner::reset_db();
TestRunner::go(new Unit_Tester($Conf));
TestRunner::go(new XtCheck_Tester($Conf));
TestRunner::go(new Navigation_Tester);
TestRunner::go(new AuthorMatch_Tester);
TestRunner::go(new IntlMsgSet_Tester);
TestRunner::go(new Abbreviation_Tester($Conf));
TestRunner::go(new DocumentBasics_Tester($Conf));
TestRunner::go(new FixCollaborators_Tester);
TestRunner::go(new Mention_Tester($Conf));
xassert_exit();
