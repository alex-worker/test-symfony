#!/bin/bash

psql -h db -Ukpacku < /backup/backup.sql
