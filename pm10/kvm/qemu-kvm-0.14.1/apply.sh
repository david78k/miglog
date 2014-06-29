#!/bin/sh

file=arch_init.c
mv $file $file.orig
cp $file.patch $file

file=qemu-options.hx
mv $file $file.orig
cp $file.patch $file

file=vl.c
mv $file $file.orig
cp $file.patch $file

mv /usr/libexec/qemu-kvm /usr/libexec/qemu-kvm.symlnk
cat >/usr/libexec/qemu-kvm << EOF
/usr/local/bin/qemu-system-x86_64 -no-dedupe \${@}
EOF

chmod 755 /usr/libexec/qemu-kvm

make
make install
