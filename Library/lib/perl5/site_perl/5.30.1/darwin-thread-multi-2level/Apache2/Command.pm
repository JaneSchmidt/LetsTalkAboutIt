# 
# /*
#  * *********** WARNING **************
#  * This file generated by ModPerl::WrapXS/0.01
#  * Any changes made here will be lost
#  * ***********************************
#  * 01: lib/ModPerl/Code.pm:716
#  * 02: lib/ModPerl/WrapXS.pm:635
#  * 03: lib/ModPerl/WrapXS.pm:1186
#  * 04: Makefile.PL:435
#  * 05: Makefile.PL:333
#  * 06: Makefile.PL:59
#  */
# 


package Apache2::Command;

use strict;
use warnings FATAL => 'all';



use Apache2::XSLoader ();
our $VERSION = '2.000011';
Apache2::XSLoader::load __PACKAGE__;



1;
__END__

=head1 NAME

Apache2::Command - Perl API for accessing Apache module command information




=head1 Synopsis

  use Apache2::Module ();
  use Apache2::Command ();
  my $module = Apache2::Module::find_linked_module('mod_perl.c');
  
  for (my $cmd = $module->cmds; $cmd; $cmd = $cmd->next) {
      $cmd->args_how();
      $cmd->errmsg();
      $cmd->name();
      $cmd->req_override();
  }






=head1 Description

C<Apache2::Command> provides the Perl API for accessing Apache module
command information






=head1 API

C<Apache2::Command> provides the following functions and/or methods:






=head2 C<args_how>

What the command expects as arguments:

  $how = $cmd->args_how();

=over 4

=item obj: C<$cmd>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

=item ret: C<$how> ( C<L<Apache2::Const :cmd_how
constant|docs::2.0::api::Apache2::Const/C__cmd_how_>> )

The flag value representing the type of this command
(i.e. C<Apache2::Const::ITERATE>, C<Apache2::Const::TAKE2>).

=item since: 2.0.00

=back







=head2 C<errmsg>

Get I<usage> message for that command, in case of syntax errors:

  $error = $cmd->errmsg();

=over 4

=item obj: C<$cmd>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

=item ret: C<$error> ( string )

The error message

=item since: 2.0.00

=back







=head2 C<name>

Get the name of this command:

  $name = $cmd->name();

=over 4

=item obj: C<$cmd>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

=item ret: C<$name> ( string )

The command name

=item since: 2.0.00

=back






=head2 C<next>

Get the next command in the chain of commands for this module:

  $next = $cmd->next();

=over 4

=item obj: C<$cmd>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

=item ret: C<$next>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

Returns the next command in the chain for this module, C<undef> for
the last command.

=item since: 2.0.00

=back








=head2 C<req_override>

What overrides need to be allowed to enable this command:

  $override = $cmd->req_override

=over 4

=item obj: C<$cmd>
( C<L<Apache2::Command object|docs::2.0::api::Apache2::Command>> )

=item ret: C<$override> ( C<L<Apache2::Const :override
constant|docs::2.0::api::Apache2::Const/C__override_>> )

The bit mask representing the overrides this command is allowed in
(i.e C<Apache2::Const::OR_ALL>/C<Apache2::Const::ACCESS_CONF>).

=item since: 2.0.00

=back

For example:

  use Apache2::Const -compile => qw(:override);
  $cmd->req_override() & Apache2::Const::OR_AUTHCFG;
  $cmd->req_override() & Apache2::Const::OR_LIMIT;






=head1 See Also

L<mod_perl 2.0 documentation|docs::2.0::index>.




=head1 Copyright

mod_perl 2.0 and its core modules are copyrighted under
The Apache Software License, Version 2.0.




=head1 Authors

L<The mod_perl development team and numerous
contributors|about::contributors::people>.

=cut

