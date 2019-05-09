    +operators: array:29 [▼
      0 => "="
      1 => "<"
      2 => ">"
      3 => "<="
      4 => ">="
      5 => "<>"
      6 => "!="
      7 => "<=>"
      8 => "like"
      9 => "like binary"
      10 => "not like"
      11 => "ilike"
      12 => "&"
      13 => "|"
      14 => "^"
      15 => "<<"
      16 => ">>"
      17 => "rlike"
      18 => "regexp"
      19 => "not regexp"
      20 => "~"
      21 => "~*"
      22 => "!~"
      23 => "!~*"
      24 => "similar to"
      25 => "not similar to"
      26 => "not ilike"
      27 => "~~*"
      28 => "!~~*"
    ]

    +grammar: MySqlGrammar {#846 ▼
      #operators: array:1 [▼
        0 => "sounds like"
      ]
      #selectComponents: array:11 [▼
        0 => "aggregate"
        1 => "columns"
        2 => "from"
        3 => "joins"
        4 => "wheres"
        5 => "groups"
        6 => "havings"
        7 => "orders"
        8 => "limit"
        9 => "offset"
        10 => "lock"
      ]
      #tablePrefix: ""
    }


    +bindings: array:7 [▼
      "select" => []
      "from" => []
      "join" => []
      "where" => array:1 [▶]
      "having" => []
      "order" => []
      "union" => []
    ]

    #passthru: array:13 [▼
    0 => "insert"
    1 => "insertGetId"
    2 => "getBindings"
    3 => "toSql"
    4 => "exists"
    5 => "doesntExist"
    6 => "count"
    7 => "min"
    8 => "max"
    9 => "avg"
    10 => "average"
    11 => "sum"
    12 => "getConnection"
  ]