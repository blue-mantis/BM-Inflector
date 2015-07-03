# BM Inflector
A Craft CMS plugin. Multilingual inflector that transforms words from singular to plural, underscore to camel case, and more.

# User Guide

##1. Configure Language

Navigate to your sites plugin listing in the craft admin panel, eg: `http://www.example.com/admin/settings/plugins`

![screenshot](http://i.imgur.com/p01huSO.png)

Click the plugin name "Inflector" to access the plugins control panel. Then enter the desired langauge (supported languages: en,fr,nb,es,tr).

![screenshot](http://i.imgur.com/hgRRACc.png)

##2. Perform inflection method

Simply pass the string to one of the custom twig methods listed below, like so:

`{{ myString|titleize }}`

## Custom Twig Methods

### pluralize

```
{% set myString = 'post' %}
myString|pluralize
```
results in...
"posts"

```
{% set myString = 'child' %}
myString|pluralize
```
results in...
"children"

```
{% set myString = 'sheep' %}
myString|pluralize
```
results in...
"sheep"

```
{% set myString = 'words' %}
myString|pluralize
```
results in...
"words"

```
{% set myString = 'CamelChild' %}
myString|pluralize
```
results in...
"CamelChildren"


# singularize

```
{% set myString = 'posts' %}
myString|singularize
```
results in...
"post"

```
{% set myString = 'children' %}
myString|singularize
```
results in...
"child"

```
{% set myString = 'sheep' %}
myString|singularize
```
results in...
"sheep"

```
{% set myString = 'word' %}
myString|singularize
```
results in...
"word"

```
{% set myString = 'CamelChildren' %}
myString|singularize
```
results in...
"CamelChild"


# camelize

```
{% set myString = 'active_model' %}
myString|camelize
```
results in...
'ActiveModel'

```
{% set myString = 'active_model', true %}
myString|camelize
```
results in...
'activeModel'

```
{% set myString = 'active_model/errors' %}
myString|camelize
```
results in...
'ActiveModel\Errors'

```
{% set myString = 'active_model/errors', true %}
myString|camelize
```
results in...
'activeModel\Errors'


# underscore

```
{% set myString = 'ActiveModel' %}
myString|underscore
```
results in...
'active_model'

```
{% set myString = 'ActiveModel\Errors' %}
myString|underscore
```
results in...
'active_model/errors'


# humanize

```
{% set myString = 'employee_salary' %}
myString|humanize
```
results in...
"Employee salary"

```
{% set myString = 'author_id' %}
myString|humanize
```
results in...
"Author"


# titleize

```
{% set myString = 'man from the boondocks' %}
myString|titleize
```
results in...
"Man From The Boondocks"

```
{% set myString = 'x-men: the last stand' %}
myString|titleize
```
results in...
"X Men: The Last Stand"

```
{% set myString = 'TheManWithoutAPast' %}
myString|titleize
```
results in...
"The Man Without A Past"

```
{% set myString = 'raiders_of_the_lost_ark' %}
myString|titleize
```
results in...
"Raiders Of The Lost Ark"


# ordinal

```
{% set myNumber = 1 %}
myNumber|ordinal
```
results in...
"st"

```
{% set myNumber = 2 %}
myNumber|ordinal
```
results in...
"nd"

```
{% set myNumber = 1002 %}
myNumber|ordinal
```
results in...
"nd"

```
{% set myNumber = 1003 %}
myNumber|ordinal
```
results in...
"rd"

```
{% set myNumber = -11 %}
myNumber|ordinal
```
results in...
"th"

```
{% set myNumber = -1021 %}
myNumber|ordinal
```
results in...
"st"


# ordinalize

```
{% set myNumber = 1 %}
myNumber|ordinalize
```
results in...
"1st"

```
{% set myNumber = 2 %}
myNumber|ordinalize
```
results in...
"2nd"

```
{% set myNumber = 1002 %}
myNumber|ordinalize
```
results in...
"1002nd"

```
{% set myNumber = 1003 %}
myNumber|ordinalize
```
results in...
"1003rd"

```
{% set myNumber = -11 %}
myNumber|ordinalize
```
results in...
"-11th"

```
{% set myNumber = -1021 %}
myNumber|ordinalize
```
results in...
"-1021st"



# More plugins by Blue Mantis

... can be found [here](http://plugins.bluemantis.com/)
