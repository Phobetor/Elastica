<?php

namespace Elastica\Query;

/**
 * Match query.
 *
 * This class is for backward compatibility reason for all php < 8 versions. For PHP 8 and above use MatchQuery as Match is reserved.
 *
 * @link http://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-bool-query.html
 */
class Match extends MatchQuery
{

}
