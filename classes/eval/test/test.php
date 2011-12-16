<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Test Suite for Expression Manager</title>
    </head>
    <body>
        <table border="1">
            <tr><th>Test</th><th>Description</th></tr>
            <tr>
                <td><a href="functions.php">Available Functions</a></td>
                <td>Show the list of functions available within Expression Manager.</td>
            </tr>
            <tr>
                <td><a href="stringsplit.php">String Splitter</a></td>
                <td>Unit test of String Splitter to ensure splits source into Strings vs. Expressions.  Expressions are surrounded by un-escaped curly braces</td>
            </tr>
            <tr>
                <td><a href="tokenizer.php">Tokenizer</a></td>
                <td>Demonstrates that Expression Manager properly detects and categorizes tokens (e.g. variables, string, functions, operators)</td>
            </tr>
            <tr>
                <td><a href="unit.php">Unit Tests of Isolated Expressions</a></td>
                <td>Unit tests of each of Expression Manager's features (e.g. all operators and functions).  Color coding shows whether any tests fail.  Syntax highlighting shows cases where Expression Manager properly detects bad syntax.</td>
            </tr>
            <tr>
                <td><a href="strings_with_expressions.php">Unit Tests of Expressions Within Strings</a></td>
                <td>Test how Expression Manager can process strings containing one or more variable, token, or expression replacements surrounded by curly braces.</td>
            </tr>
            <tr>
                <td><a href="relevance.php">Unit Test Dynamic Relevance Processing</a></td>
                <td>Questions and substitutions should dynamically change based upon values entered.</td>
            </tr>
            <tr>
                <td><a href="conditions2relevance.php">Preview Conversion of Conditions to Relevance</a></td>
                <td>Shows Relevance equations for all conditions in the database, grouped by question id (and not pretty-printed)</td>
            </tr>
            <tr>
                <td><a href="usage.php">Running Log - Translations on this Page</a></td>
                <td>For this page group, shows all of the translation requests, the pretty-printed version of the request, and the translated results.  Note this is only visible if $debugLEM==true</td>
            </tr>
            <tr>
                <td><a href="data.php">Running Log - Source Data</a></td>
                <td>Shows log of mapping of variable names to SGQA and JavaScript names, plus question, and current values.  Note, this is only visible if $debugLEM==true</td>
            </tr>
            <tr>
                <td><a href="syntax_errors.php">Log of Syntax Errors</a></td>
                <td>Show cumulative log of syntax errors</td>
            </tr>
            <tr>
                <td><a href="reset_syntax_error_log.php"><span style='background-color: red;'>**</span>Reset Log of Syntax Errors</a></td>
                <td><span style='color: red;'>CAUTION: This function changes your database.</span> Remove log of syntax errors</td>
            </tr>
            <tr>
                <td><a href="navigation_test.php">Test Navigation</a></td>
                <td>Tests whether navigation properly handles relevant and irrelevant groups</td>
            </tr>
            <tr>
                <td><a href="survey_logic_file.php">Show Survey Logic File</a></td>
                <td>Shows the logic for the survey (e.g. relevance, validation), and all tailoring</td>
            </tr>
        </table>
    </body>
</html>
