<?php

class QueryBuilder implements QueryBuilderInterface{
    private stdClass $query;

    public function __construct()
    {
        $this->query = new stdClass();
    }

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->query->action = "SELECT";
        $this->query->table = $table;
        $this->query->fields = $fields;

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->query->where = $field . ' ' . $operator . ' ' . $value;

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        $this->query->limit = sprintf('LIMIT %d, %d', $start, $offset);

        return $this;
    }

    public function getSQL(): string
    {
        $sql = '';

        $sql .= $this->query->action;
        $sql .= ' ' . implode(', ', $this->query->fields);
        $sql .= ' FROM ' . $this->query->table;
        $sql .= ' WHERE ' . $this->query->where;

        return $sql;
    }
}