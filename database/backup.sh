#!/bin/bash

pg_dump -h db -Ukpacku kpacku > /backup/backup.sql
