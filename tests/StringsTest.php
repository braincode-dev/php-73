<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals(<<<TEXT
        Heredoc
        TEXT, 'Heredoc');


        // TODO Nowdoc
        $this->assertEquals(<<<'TEXT'
        Nowdoc
        TEXT, 'Nowdoc');
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello', ltrim('  Hello'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('Hello', rtrim('Hello  '));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello', strip_tags('<p>Hello</p>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&lt;p&gt;Hello&lt;/p&gt;', htmlspecialchars('<p>Hello</p>'));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Мій хом\'як з\'їв пів\'яйця", addslashes("Мій хом'як з'їв пів'яйця"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(true, strcmp('Hello', 'hello'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(false, strncasecmp('Hello', 'hello', 1));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('Hello world', str_replace('people', 'world', 'Hello people'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(1, strpos('Hello', 'e'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('@epam.com', strstr('alex.kizyma@epam.com', '@'));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('w', strrchr('window', 'war'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('d', substr('Hello world', -1));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $this->assertEquals('I have 2 cars', sprintf('I have %d %s', 2, 'cars'));
    }
}