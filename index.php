<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Checker #2</title>
</head>
<body>
    <div class="container-fluid pt-3">
    <?php
    $filename = "solution.php";

    require_once $filename;

    $correct = [];
    $wrong   = [];

    $sscore = 0;

    // count_in_range
    if (function_exists('count_in_range')) {
        if (
            count_in_range([-2, 0, 3, 7, 10], 0, 7) == 3
            && count_in_range([1, 2, 3], 4, 6)  == 0
            && count_in_range([], 0, 10) == 0
            && count_in_range([1, 2, 3, 4, 5, 6, 7], 3, 7) == 5
        ){
            $correct[] = 'count_in_range';
            $sscore += 1;
        }
        else { $wrong[] = 'count_in_range'; }
    }

    // count_occurrences
    if (function_exists('count_occurrences')) {
        if (
            count_occurrences([2, 3, 2, "2"], 2) == 2
            && count_occurrences(["a","b","a","a"], "a") == 3
            && count_occurrences([], 5) == 0
            && count_occurrences([1, 1, 1, 1], 1) == 4
        ) {
            $correct[] = 'count_occurrences';
            $sscore += 1;
        }
        else { $wrong[] = 'count_occurrences'; }
    }

    // sum_positives
    if (function_exists('sum_positives')) {
        if (
            sum_positives([-3, 5, 2, -1]) == 7
            && sum_positives([0, 0, 0] ) == 0
            && sum_positives([10.5, -2.5, 1.0]) == 11.5
            && sum_positives([0, 0, 1, 1, 1]) == 3
        ) {
            $correct[] = 'sum_positives';
            $sscore += 1;
        }
        else { $wrong[] = 'sum_positives'; }
    }

    // sum_positives
    if (function_exists('sum_negatives')) {
        if (
            sum_negatives([-3, 5, -2]) == 5
            && sum_negatives([1, 2, 3]  ) == 0
            && sum_negatives([-1.5, -0.5, 2.0]) == 2
            && sum_negatives([-1]) == 1
        ) {
            $correct[] = 'sum_negatives';
            $sscore += 1;
        }
        else { $wrong[] = 'sum_negatives'; }
    }

    // count_distinct
    if (function_exists('count_distinct')) {

        if (
            count_distinct([1, 1, "1", 2]) == 3
            && count_distinct(["x", "x", "x"]) == 1
            && count_distinct([]) == 0
            && count_distinct([1, 1, 1, 1, 1]) == 1
        ) {
            $correct[] = 'count_distinct';
            $sscore += 1;
        }
        else { $wrong[] = 'count_distinct'; }
    }

    // has_duplicates
    if (function_exists('has_duplicates')) {

        if (
            has_duplicates([3, 7, 3]) == true
            && has_duplicates(["a", "b", "c"]) == false
            && has_duplicates([]) == false
            && has_duplicates([5, 4]) == false
        ) {
            $correct[] = 'has_duplicates';
            $sscore += 1;
        }
        else { $wrong[] = 'has_duplicates'; }
    }


    // index_of_max
    if (function_exists('index_of_max')) {
        if (
            index_of_max([5, 9, 9, 2] ) == 1
            && index_of_max([-1, -5, -2]) == 0
            && index_of_max([3.2, 4.0, 2.8, 5.5]) == 3
            && index_of_max([10, 100, 87, 1000, 99]) == 3
        ) {
            $correct[] = 'index_of_max';
            $sscore += 1;
        }
        else { $wrong[] = 'index_of_max'; }
    }

    // index_of_min
    if (function_exists('index_of_min')) {
        if (
            index_of_min([4.2, 1.1, 1.1, 3.0] ) == 1
            && index_of_min([0, -1, -1, -2]) == 3
            && index_of_min([8]) == 0
            && index_of_min([-1, 2, -6, 4, -100, -99]) == 4
        ) {
            $correct[] = 'index_of_min';
            $sscore += 1;
        }
        else { $wrong[] = 'index_of_min'; }
    }

    // index_of_min
    if (function_exists('mode_value')) {
        if (
            mode_value(["M", "S", "M", "L", "S", "M"] ) == "M"
            && mode_value([1, 2, 2, 1]) == 1
            && mode_value([] ) == null
            && mode_value(["S", "E", "M", "X", "T"])  == "S"
        ) {
            $correct[] = 'mode_value';
            $sscore += 1;
        }
        else { $wrong[] = 'mode_value'; }
    }

    // index_of_min
    if (function_exists('merged_unique_count')) {
        if (
            merged_unique_count([1,2,2], [2,3]) == 3
            && merged_unique_count(["a"], ["a","b","a"]) == 2
            && merged_unique_count([], []) == 0
            && merged_unique_count(["1", "2"], ["1", "1", "1"]) == 2
        ) {
            $correct[] = 'merged_unique_count';
            $sscore += 1;
        }
        else { $wrong[] = 'merged_unique_count'; }
    }

    // is_sorted_ascending
    if (function_exists('is_sorted_ascending')) {
        if (
            is_sorted_ascending([1, 2, 2, 5]) == true
            && is_sorted_ascending([3, 2, 2]) == false
            && is_sorted_ascending([]) == true
            && is_sorted_ascending([-1, 0, 1]) == true
        ) {
            $correct[] = 'is_sorted_ascending';
            $sscore += 1;
        }
        else { $wrong[] = 'is_sorted_ascending'; }
    }

    // max_absolute
    if (function_exists('max_absolute')) {
        if (
            max_absolute([-7, 5, 6]) == -7
            && max_absolute([3, -4, 4]) == -4
            && max_absolute([0]) == 0
            && max_absolute([-8, -1, 1, 9, -10]) == -10
        ) {
            $correct[] = 'max_absolute';
            $sscore += 1;
        }
        else { $wrong[] = 'max_absolute'; }
    }


    // range_span
    if (function_exists('range_span')) {
        if (
            range_span([4, 10, 2] ) == 8
            && range_span([5]) == 0
            && range_span([-3, 7, -1, 6]) == 10
            && range_span([8, 7, 1, 9]) == 8
        ) {
            $correct[] = 'range_span';
            $sscore += 1;
        }
        else { $wrong[] = 'range_span'; }
    }


    // count_greater_than
    if (function_exists('count_greater_than')) {
        if (
            count_greater_than([1, 5, 7, 2], 4) == 2
            && count_greater_than([4, 4, 4], 4) == 0
            && count_greater_than([], 10) == 0
            && count_greater_than([-1, -1, -1, -2], -2) == 3
        ) {
            $correct[] = 'count_greater_than';
            $sscore += 1;
        }
        else { $wrong[] = 'count_greater_than'; }
    }

    // count_strings_longer_than
    if (function_exists('count_strings_longer_than')) {
        if (
            count_strings_longer_than(["cat", "house", "a"], 3) == 1
            && count_strings_longer_than(["abc", "abcd"], 2) == 2
            && count_strings_longer_than([], 5) == 0
            && count_strings_longer_than(["~", "~~", "~~~"], 0) == 3
        ) {
            $correct[] = 'count_strings_longer_than';
            $sscore += 1;
        }
        else { $wrong[] = 'count_strings_longer_than'; }
    }

    // shortest_string
    if (function_exists('shortest_string')) {
        if (
            shortest_string(["cat", "a", "dog"]) == "a"
            && shortest_string(["one", "two", "six"]) == "one"
            && shortest_string(["longword"]) == "longword"
            && shortest_string([" ", "!!", "", "~"]) == ""
        ) {
            $correct[] = 'shortest_string';
            $sscore += 1;
        }
        else { $wrong[] = 'shortest_string'; }
    }

    // concatenate_strings
    if (function_exists('concatenate_strings')) {
        if (
            concatenate_strings(["a", "b", "c"]) == "abc"
            && concatenate_strings(["hello", "world"]) == "helloworld"
            && concatenate_strings([]) == ""
            && concatenate_strings(["", "", " "]) === " "
        ) {
            $correct[] = 'concatenate_strings';
            $sscore += 1;
        }
        else { $wrong[] = 'concatenate_strings'; }
    }

    // count_starting_with
    if (function_exists('count_starting_with')) {
        if (
            count_starting_with(["apple", "ant", "banana"], "a") == 2
            && count_starting_with(["dog", "cat", "cow"], "c") == 2
            && count_starting_with([], "x") == 0
            && count_starting_with([" x", " y", "s"], " ") == 2
        ) {
            $correct[] = 'count_starting_with';
            $sscore += 1;
        }
        else { $wrong[] = 'count_starting_with'; }
    }

    // total_characters
    if (function_exists('total_characters')) {
        if (
            total_characters(["a", "bb", "ccc"]) == 6
            && total_characters(["hello", "world"]) == 10
            && total_characters([]) == 0
        ) {
            $correct[] = 'total_characters';
            $sscore += 1;
        }
        else { $wrong[] = 'total_characters'; }
    }

    // repeat_string
    if (function_exists('repeat_string')) {
        if (
            repeat_string("ha", 3) == "hahaha"
            && repeat_string("x", 5) == "xxxxx"
            && repeat_string("a", 0) == ""
            && repeat_string("", 100) == ""
        ) {
            $correct[] = 'repeat_string';
            $sscore += 1;
        }
        else { $wrong[] = 'repeat_string'; }
    }


    // is_vowel
    if (function_exists('is_vowel')) {
        if (
            is_vowel("a") == true
            && is_vowel("E") == true
            && is_vowel("b") == false
            && is_vowel("") == false
        ) {
            $correct[] = 'is_vowel';
            $sscore += 1;
        }
        else { $wrong[] = 'is_vowel'; }
    }


    // char_at
    if (function_exists('char_at')) {
        if (
            char_at("hello", 1) == "e"
            && char_at("world", 0) == "w"
            && char_at("cat", 5) == ""
            && char_at("cat", -4) == ""
            && char_at("programming", 6) == "m"
        ) {
            $correct[] = 'char_at';
            $sscore += 1;
        }
        else { $wrong[] = 'char_at'; }
    }

    // absolute_difference
    if (function_exists('absolute_difference')) {
        if (
            absolute_difference(5, 3) == 2
            && absolute_difference(3, 5) == 2
            && absolute_difference(-4, 1) == 5
            && absolute_difference(-9, 2) == 11
        ) {
            $correct[] = 'absolute_difference';
            $sscore += 1;
        }
        else { $wrong[] = 'absolute_difference'; }
    }


    // is_uppercase
    if (function_exists('is_uppercase')) {
        if (
            is_uppercase("A") == true
            && is_uppercase("z") == false
            && is_uppercase("7") == false
        ) {
            $correct[] = 'is_uppercase';
            $sscore += 1;
        }
        else { $wrong[] = 'is_uppercase'; }
    }

    // sum_numbers_where_string_long_enough
    if (function_exists('sum_numbers_where_string_long_enough')) {
        if (
            sum_numbers_where_string_long_enough(["cat", "house", "a"], [5, 10, 2], 3) == 15
            && sum_numbers_where_string_long_enough(["hi", "okay", "sun", "moon"], [4, 5, 3, 7], 4) == 12
            && sum_numbers_where_string_long_enough([], [], 1) == 0
            && sum_numbers_where_string_long_enough(["", " ", ""], [100, 100, 200], 0) == 400
        ) {
            $correct[] = 'sum_numbers_where_string_long_enough';
            $sscore += 1;
        }
        else { $wrong[] = 'sum_numbers_where_string_long_enough'; }
    }
    ?>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th colspan="3" class="text-secondary">CHECKER 2</th>
                </tr>
                <tr>
                    <th style="width: 30%; text-align:center">FILE</th>
                    <th style="width: 35%; text-align:center" class="text-success">PASSED</th>
                    <th style="width: 35%; text-align:center" class="text-danger">FAILED</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">
                        <h1><code><?= $filename ?></code></h1>
                        <h1 class="mt-3"><big><span class="<?= $sscore >= 5 ? 'text-success' : 'text-danger' ?>"><?= $sscore ?></span><span class="text-secondary">/10</span></big></h1>
                    </td>
                    <td class="table-success" cl>
                        <ol>
                        <?php foreach ($correct as $c) { ?>
                            <li class="text-success fw-bold m-0"><?= $c ?></li>
                        <?php } ?>
                        </ol>
                    </td>
                    <td class="table-danger">
                        <ol>
                            <?php foreach ($wrong as $w) { ?>
                                <li class="text-danger fw-bold m-0"><?= $w ?></li>
                            <?php } ?>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>