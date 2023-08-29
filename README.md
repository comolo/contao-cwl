Comolo AWS CloudWatchLogger Bundle
==================================

The purpose of this extension is to mirror log messages to the AWS CloudWatch Logs service.

## Configuration

You need to have a .env file present at your Contao's root directory. In this file you need to have these parameters set:

* `AWS_CLOUD_WATCH_KEY`
* `AWS_CLOUD_WATCH_SECRET`
* `AWS_CLOUD_WATCH_GROUP`
* `AWS_CLOUD_WATCH_STREAM`
* `AWS_CLOUD_WATCH_RETENTION`
* `AWS_CLOUD_WATCH_REGION`
* `AWS_CLOUD_WATCH_VERSION`
* `AWS_CLOUD_WATCH_BATCH`
* `AWS_CLOUD_WATCH_LEVEL`

Example:

```shell
AWS_CLOUD_WATCH_KEY=ABCDEFGHIJKLMNOPQRST
AWS_CLOUD_WATCH_SECRET=abcabcabcabcabcabcabcabcabcabcabcabcabc
AWS_CLOUD_WATCH_GROUP=/my/group
AWS_CLOUD_WATCH_STREAM=%kernel.environment%
AWS_CLOUD_WATCH_RETENTION=60
AWS_CLOUD_WATCH_REGION=eu-central-1
AWS_CLOUD_WATCH_VERSION=latest
AWS_CLOUD_WATCH_BATCH=10000
AWS_CLOUD_WATCH_LEVEL=WARNING
```
