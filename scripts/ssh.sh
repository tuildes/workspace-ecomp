#!/bin/bash

ssh-keygen -t rsa -N '' -f ~/.ssh/id_rsa <<< y;
cat ~/.ssh/id_rsa.pub;
