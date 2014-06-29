usage: ./apply.sh

This patch adds a new command line option (-no-dedupe),
which disables the detection of zero-filled pages.
But, I wrote this patch 1-2 years ago. It will not be applied to the
latest Qemu.
This is a small small patch. I think you can do the same thing for the
latest Qemu easily.

current 1.0.1
0.14.1: applicable
